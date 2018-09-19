<template>
    <div>
        <div class="banner">
            <div class="nested">
                <h1 class="search-title">Enter Location</h1>
                <form method="get" action="/search/location">
                        <div class="input-group">
                            <vue-google-autocomplete
                                    ref="address"
                                    id="map"
                                    classname="form-control"
                                    placeholder="Please enter your location"
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
            </div>
        </div>

        <div class="content1">
            <ul>
                <li><img src="./logo/red1.jpg"/></li>
                <li class="content1Title"><h2>Title1</h2></li>
                <li class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies,
                    purus lectus malesuada libero, sit amet commodo magna eros quis urna.
                </li>
            </ul>
            <ul>
                <li><img src="./logo/red2.jpg"/></li>
                <li class="content1Title"><h2>Title2</h2></li>
                <li class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies,
                    purus lectus malesuada libero, sit amet commodo magna eros quis urna.
                </li>
            </ul>
            <ul>
                <li><img src="./logo/red3.jpg"/></li>
                <li class="content1Title"><h2>Title3</h2></li>
                <li class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                    Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies,
                    purus lectus malesuada libero, sit amet commodo magna eros quis urna.
                </li>
            </ul>
        </div>

        <div class="content2">
            <h3>User Review</h3>
            <div class="content2nested">
                <ul>
                    <li><img src="./logo/users.png"/></li>
                    <li class="content2Title"><h2>User1</h2></li>
                    <li class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies,
                        purus lectus malesuada libero, sit amet commodo magna eros quis urna.
                    </li>
                </ul>
                <ul>
                    <li><img src="./logo/users.png"/></li>
                    <li class="content2Title"><h2>User2</h2></li>
                    <li class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies,
                        purus lectus malesuada libero, sit amet commodo magna eros quis urna.
                    </li>
                </ul>
                <ul>
                    <li><img src="./logo/users.png"/></li>
                    <li class="content2Title"><h2>User3</h2></li>
                    <li class="description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies,
                        purus lectus malesuada libero, sit amet commodo magna eros quis urna.
                    </li>
                </ul>
            </div>
        </div>

        <div class="about">
            <h3>About Us</h3>
            <div class="paragraph">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.
                Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.
                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci.
                Aenean nec lorem. In porttitor. Donec laoreet nonummy augue.
                Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy.
            </div>
        </div>

        <div class="contacts">
            <ul class="contactsul">
                <h3>Contacts</h3>
                <li>Name: Agbolade Oladayo</li>
                <li>Email: dayoagbolade@gmail.com</li>
                <li>phone: 08147471248</li>
            </ul>
            <ul>
                <h3>Subscribe to our News Letter</h3>
                <li><input name="subscribe" class="form-control" type="text" placeholder="Email..." style="width: 100%" /></li>
            </ul>
        </div>
    </div>
</template>

<script>
    import VueGoogleAutocomplete from 'vue-google-autocomplete'
    export default {
        components: { VueGoogleAutocomplete },
        data(){
            return {
                address: ''
            }
        },
        methods: {
            /**
             * When the location found
             * @param {Object} addressData Data of the found location
             * @param {Object} placeResultData PlaceResult object
             * @param {String} id Input container ID
             */
            getAddressData: function (addressData, placeResultData, id) {
                this.address = addressData;
            },
        },
        created(){
            return this.getAddressData();
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
    .banner{
        display: grid;
        background-image: url("logo/banner.jpg");
        grid-template-columns: repeat(1, 1fr);
        align-items: center;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        width: 100%;
        position: relative;
        height: 700px;
        opacity: 0.8;
    }

    .search-title{
        color: white;
        text-align: center;
    }

    .nested{
        width: 80%;
        margin: 0 auto;
    }

    div .input{
        height: 50px;
    }

    /*Content 1*/
    .content1{
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-auto-rows: minmax(150px, auto);
        background: white;
        justify-items: center;
        padding: 25px 0;
        grid-gap: 10px;
    }

    .content1 img{
        width: 100%;
        height: 100%;
    }

    .content1 ul{
        padding: 0 10px;
    }

    .content1Title{
        padding: 10px 0;
    }

    .description{
        text-align: justify;
    }

    /*Content 2*/
    .content2{
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        background: #890505;
        justify-items: center;
        padding: 15px;
        color: #ffffff;
    }

    .content2nested{
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-auto-rows: minmax(150px, auto);
        background: #890505;
        justify-items: center;
        padding: 25px 0;
        grid-gap: 10px;
    }

    .content2 img{
        display: block;
        margin: 0 auto;
        width: 50%;
        height: 50%;
        background: white;
    }

    .content2Title{
        text-align: center;
    }

    .content2 ul{
        border: 1px solid white;
        padding: 20px;
    }
    /*Global*/
    .content1 ul li, .content2 ul li{
        list-style-type: none;
    }

    /*About*/
    .about{
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        justify-items: center;
        padding: 20px;
        text-align: justify;
        background: white;
    }

    .about .paragraph{
        display: grid;
        grid-auto-rows: minmax(150px, auto);
    }

    .about h3{
        text-decoration: underline;
    }

    /*Contacts*/
    .contacts{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        border-bottom: 1px solid;
        border-top: 1px solid;
        grid-gap: 10px;
        padding: 20px 20px;
        background: white;
    }

    .contacts h3{
        text-decoration: underline;
    }

    .contacts ul li{
        list-style-type: none;
    }

    /*Media Queries*/
    @media screen and (max-width: 780px) {

    }

    @media screen and (max-width: 660px) {
        .banner{
            background-image: url("logo/bannerM.jpg");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            width: 100%;
            position: relative;
            height: 400px;
        }

        .content1{
            grid-template-columns: repeat(1, 1fr);
            grid-auto-rows: minmax(150px, auto);
            padding: 0;
        }

        .content1 img{
            width: 100%;
            height: 100%;
        }

        .content1 ul{
            width: 55%;
            padding-top: 10px;
            margin: 10px auto;
            padding-left: 0;
            padding-right: 0;
        }

        .content2nested{
            grid-template-columns: repeat(1, 1fr);
            justify-items: center;
            padding: 25px 0;
        }

        .content2 img{
            display: block;
            margin: 0 auto;
            width: 20%;
            height: 20%;
        }

        .contacts{
            grid-template-columns: repeat(1, 1fr);
            justify-items: start;
        }

    }

    @media screen and (max-width: 480px) {
        .banner{
            background-image: url("logo/bannerM.jpg");
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover;
            width: 100%;
            position: relative;
            height: 400px;
        }
    }
</style>