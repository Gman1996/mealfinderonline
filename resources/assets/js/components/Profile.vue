<template>
    <div class="container">
        <h2>Profile</h2>
        <div class="centralise col-md-6">
            <!--Tab links here-->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="bookmarks-tab" data-toggle="tab" href="#bookmarks" role="tab" aria-controls="bookmarks" aria-selected="true">Bookmarks</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Searches</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Profile Settings</a>
                </li>
            </ul>

            <!--Tab contents to show on click here-->
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="bookmarks" role="tabpanel" aria-labelledby="bookmarks-tab">
                    <div class="addpadding">
                        <div v-for="detail, index in details" class="card card-body mb-2">
                            <p>Bookmark: {{ detail.bookmarks }}</p>
                            <p>Id:{{detail.id}}</p>
                            <hr>
                            <button class="btn btn-danger" v-on:click="deleteFinder(detail.id, index)">Delete</button>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="addpadding">
                        <div v-for="detail, index in details" class="card card-body mb-2 search-grid">
                            <p>Search: {{ detail.recentlySearched }} </p>
                            <p class="search"><i class="fa fa-times fa-sm search"></i></p>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="card card-body mb-2">
                        <h3>BookMarks</h3>
                        <p>Body: {{name}} </p>
                        <hr>
                        <button class="btn btn-warning mb-2">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                details: [],
                name: 'coming soon!'
            }
        },
        methods:{
            getDetails(){
                this.$http.get('http://localhost:8000/api/test/').then(function (resp) {
                    console.log(resp);
                    this.details = resp.body.data;
                })
            },

            deleteFinder(id, index){
                var app = this;
                this.$http.delete('http://localhost:8000/api/tester/' + id).then(function (resp) {
                    //app.details;
                    //this.details = resp.body.data;
                    app.details.splice(index, 1);
                })
                .catch(function (resp) {
                    alert("Could not delete bookmark");
                });
            }
        },
        created(){
                this.getDetails();
        }
    }
</script>

<style scoped>
    .addpadding{
        padding: 10px;
    }

    .search-grid{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }

    .search{
        display: grid;
        justify-items: right;
    }

    .centralise{
        margin: 0 auto;
    }

    h2{
        text-align: center;
    }
</style>