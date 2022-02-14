<template>
    <div>
        <!-- Description -->
        <div class="container description">
            <h5>Cloud-based web applications allow anyone to perform complex perations and analytics with intutive experience that supports each manufacture's APIs and formats, regardless of location or environment.</h5>
        </div>

        <!-- List of Applications -->
        <Applicationsection />
    </div>
</template>

<script>
import Applicationsection from '~/components/en/products/Application'

export default {
    components: {
        Applicationsection
    }
}
</script>

<style scoped>
.container.description {
    padding: 50px 4rem;
}
</style>
