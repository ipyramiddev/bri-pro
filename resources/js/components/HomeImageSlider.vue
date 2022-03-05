<template>
    <div>
        <b-carousel
            id="carousel-fade"
            fade
            indicators
        >
            <div class="welcome">
                <div class="title">
                    <h1>{{ $t('welcome_to_lifeanalytics' )}}</h1>
                </div>
                <div class="content">
                    <h5>{{ $t('welcome_description') }}</h5>
                </div>
                <div class="button">
                    <b-button variant="outline-primary" :to="{ name: $t('products.url') }">{{ $t('products.text') }}</b-button>
                    <b-button variant="outline-primary" :to="{ name: $t('purchase.url') }">{{ $t('subscribe') }}</b-button>
                </div>
            </div>
            <div class="background-color-overlay">
            </div>
            <b-carousel-slide
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
.welcome {
    z-index: 900;
    text-align: center;
    position: absolute;
    width: 100%;
    padding: 15% 0;
}
.welcome .title {
    padding: 10px 0;
}
.welcome .title h1 {
    color: white;
    font-weight: 600;
}
.welcome .content {
    padding: 5px 0;
}
.welcome .content h5 {
    color: white;
}
.welcome .button {
    display: flex;
    justify-content: space-around;
    padding: 20px 0;
}
.welcome .button .btn-outline-primary {
    border-radius: 20px;
    border-color: #fff;
    color: #fff;
}
.welcome .button .btn-outline-primary:hover {
    border-color: #007FED;
}
.carousel-inner {
    max-height: 600px;
}
.carousel-inner .img-fluid {
    max-height: 600px;
}
.carousel-caption {
    bottom: 55%;
}
.background-color-overlay {
    background-color: #000000;
    opacity: 0.5;
    transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    position: absolute;
    z-index: 100;
}
</style>