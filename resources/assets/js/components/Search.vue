<template>
    <div>
        <form method="get" action="/search/location">
            <h1>Please Enter Your Location</h1>
            <h6>It is highly recommended that you use the auto
                complete feature for more accurate search results!
            </h6>
            <div class="input-group" id="input-box">
            <vue-google-autocomplete
                ref="address"
                id="autocomplete"
                classname="form-control"
                placeholder="e.g Ikeja"
                v-on:placechanged="getAddressData"
                country="ng"
                name="location"
            >
            </vue-google-autocomplete>
                <span class="input-group-btn">
                     <button class="btn btn-default input" type="submit"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <div id="map"></div>
        <div class="card">
            <div v-if="loop">
                <div class="card-header"><h3>Featured Results</h3></div>
                <div id="output">
                </div>
            </div>
        </div>
        <div id="location" v-for="geocode_detail in geocode_details">
            <div ref="lat" id="lat">{{geocode_detail.geometry.location.lat}}</div>
            <div ref="lng" id="lng">{{geocode_detail.geometry.location.lng}}</div>
        </div>
    </div>
</template>
<script>
    import VueGoogleAutocomplete from 'vue-google-autocomplete'
    export default {
       components: { VueGoogleAutocomplete },
        data(){
            return {
                loop: true,
                address: '',
                map: '',
                infowindow: '',
                search_string: this.$route.query.location,
                geocode_details: [],
                place_details: []
            }
        },

        methods: {
            //for auto complete
            getAddressData: function (addressData, placeResultData, id) {
                this.address = addressData;
            },

            //get lat and lang
            geocode: function() {
                var location = this.search_string;
                this.$http.get('https://maps.googleapis.com/maps/api/geocode/json',
                    {
                        params: {
                            address: location,
                            key: 'AIzaSyD5B7pgGcFnVuX2N10a54TXcOvHuv1jRmU',
                            region: 'NG'
                        }
                    }
                ).then(function (resp) {
                    this.geocode_details = resp.body.results;
                }).catch(function (reason) {
                    console.log(reason);
                })
            },
        },

        beforeMount(){
            this.geocode();
        },

        updated(){
            initMap();
            var that = this;
            var map;
            var infowindow;
            var places;

            //Starting Position of Map
            function initMap(){
                 var lat = $('#lat').text();
                 var lng = $('#lng').text();
                 lat = Number(lat);
                 lng = Number(lng);
                 var pyrmont = {lat: lat, lng: lng};

                map = new google.maps.Map(document.getElementById('map'), {
                    center: pyrmont,
                    zoom: 15
                });

                infowindow = new google.maps.InfoWindow();

                //NearBy Search Function
                const service = new google.maps.places.PlacesService(map);
                service.nearbySearch({
                    location: pyrmont,
                    radius: 800,
                    type: ['restaurant'],
                    openNow: false
                }, callback);
            }

            function callback(results, status) {
                if (status === google.maps.places.PlacesServiceStatus.OK) {
                    for (var i = 0; i < results.length; i++) {
                        createMarker(results[i]);
                    }
                    resultfunction(results);
                }
            }

            //Marker Settings
            function createMarker(place){
                var placeLoc = place.geometry.location;
                var marker = new google.maps.Marker({
                    map: map,
                    position: place.geometry.location
                });

                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.setContent(place.name);
                    infowindow.open(map, this);
                });
            }

            //Show Results
            function resultfunction(results){
                that.place_details = results;
                var output = '<ul id="resultgroup" class="list-group list-group-flush">';
                for(var i = 0; i < results.length; i++){
                    output += `
                   <li class="list-group-item">
                    <strong>Name: </strong>${results[i].name}
                    </li>
                    <li class="list-group-item">
                    <strong>Vicinity:</strong>${results[i].vicinity}<br>
                    </li>
                    <li class="list-group-item">
                    <strong>Rating: </strong>${Number(results[i].rating) ? `${results[i].rating}` : `Not Available`}
                    </li><br><br>
                    `;
                }
                output += '</ul>';
                document.getElementById('output').innerHTML = output;
            }
        },

        mounted(){
            // To demonstrate functionality of exposed component functions
            // Here we make focus on the user input
            this.$refs.address.focus();
        },

        computed: {

        }
    }
</script>
<style scoped>
    #map{
        height: 400px;
        width: 100%;
    }

    #input-box{
        width: 80%;
        margin: 0 auto;
    }

    h1, h3, h6{
        text-align: center;
        padding: 5px;
    }

    #location{
        display: none;
    }
</style>
