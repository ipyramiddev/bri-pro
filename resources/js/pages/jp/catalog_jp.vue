<template>
    <div>
        <!-- IAS Image analysis web application -->
        <IAS />

        <!-- FlowCal flowcytomery analysis Web application -->
        <Flowcal />
    </div>
</template>

<script>
import IAS from '~/components/jp/catalog/IAS'
import Flowcal from '~/components/jp/catalog/Flowcal'

export default {
    components: {
        IAS,
        Flowcal
    }
}
</script>
