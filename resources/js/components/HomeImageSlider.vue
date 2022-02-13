<template>
    <div>
        <b-carousel
            id="carousel-fade"
            style="text-shadow: 0px 0px 2px #000"
            fade
            indicators
        >
            <b-carousel-slide
            caption="Welcome to Life Analytics"
            v-for="item in carouselItems" :key="item.id" :img-src="item.image"
            ></b-carousel-slide>
        </b-carousel>
    </div>
</template>

<script>

export default {
    data() {
        return {
            carouselItems: [
                {
                    id: 1,
                    image: "/images/slider/slide_1.png"
                },{
                    id: 2,
                    image: "/images/slider/slide_2.png"
                },{
                    id: 3,
                    image: "/images/slider/slide_3.png"
                },{
                    id: 4,
                    image: "/images/slider/slide_4.png"
                },{
                    id: 5,
                    image: "/images/slider/slide_5.png"
                },{
                    id: 6,
                    image: "/images/slider/slide_6.png"
                },
            ]
        }
    }
}

</script>

<style>
.carousel-inner {
    max-height: 600px;
}
.carousel-inner .img-fluid {
    max-height: 600px;
}
.carousel-caption {
    bottom: 55%;
}
</style>