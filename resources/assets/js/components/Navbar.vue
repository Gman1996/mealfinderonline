<template>
    <div id="navbar">
        <nav>
            <div class="burgergrid" v-on:click="show = !show">
                <div class="burgernav"></div>
                <div class="burgernav"></div>
                <div class="burgernav"></div>
            </div>
            <ul v-bind:class="{show: show}">
                <li class="menu"><a href="/">MealFinder</a></li>
                <li class="menu"><a href="/login">Login</a></li>
                <li class="menu"><a href="/register">Register</a></li>
                <li class="menu"><a href="#f">Twitter <i class="fa fa-twitter"></i></a></li>
                <li class="menu"><a href="#t">Facebook <i class="fa fa-facebook"></i></a></li>
            </ul>
        </nav>
    </div>
</template>

<script>
    export default {
        data: function(){
            return{
                show: false
            }
        },
        methods:{

        }
    }
</script>

<style scoped>
    nav ul{
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        grid-template-rows: minmax(80px,auto);
        background: white;
        width: 100%;
        padding: 10px 0;
        margin: 0;
        grid-gap: 10px;
    }

    nav{
        background: white;
    }

    nav ul li{
        list-style-type: none;
        padding: 30px 0;
        text-align: center;
        font-weight: bolder;
        color: black;
    }

    nav ul li:hover{
        color: #890505;
        border-bottom: 3px solid;
        font-size: 15px;
    }

    nav ul{
        padding: 10px 10px;
    }


    /*Media Queries*/
    @media screen and (min-width: 661px) {
        .menu a{
            color: black;
            text-decoration: none;
        }

        .router-link-active{
            border: 1px solid #890505;
            padding: 10px;
        }
    }

    @media screen and (max-width: 660px) {
        .burgernav{
            width: 35px;
            height: 5px;
            background: black;
            margin: 3px 0;
        }

        .burgergrid{
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            justify-items: end;
            padding: 10px;
        }

        nav ul{
            background: grey;
            display: none;
        }

        nav .show{
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            grid-template-rows: minmax(40px,auto);
        }

        nav ul li{
            border-bottom: 1px solid white;
            color: white;
            text-align: start;
            padding: 5px;
        }

        .menu a{
            color: white;
            text-decoration: none;
        }
    }

    @media screen and (max-width: 480px) {

    }
</style>
