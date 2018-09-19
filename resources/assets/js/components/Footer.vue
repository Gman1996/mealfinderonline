<template>
    <div class="footer">
        <ul>
            <h5>Created and Designed by <span>Agbolade Oladayo</span></h5>
        </ul>
        <ul>
            Copyright 2018. All Rights Reserved
        </ul>
    </div>
</template>

<script>
    export default {

    }
</script>

<style scoped>
    .footer{
        display: grid;
        grid-template-columns: repeat(2,1fr);
        grid-auto-rows: minmax(80px, auto);
        padding: 20px 0;
        align-items: center;
        background: #890505;
        color: #ffffff;
    }

    .footer ul span{
        font-style: italic;
    }

    @media screen and (max-width: 660px) {
        .footer{
            grid-template-columns: repeat(1,1fr);
            justify-content: start;
        }
    }
</style>
