<template>
    <div>
        <!-- IAS Image analysis web application -->
        <IAS />

        <!-- FlowCal flowcytomery analysis Web application -->
        <Flowcal />
    </div>
</template>

<script>
import IAS from '~/components/jp/purchse/IAS'
import Flowcal from '~/components/jp/purchse/Flowcal'

export default {
    components: {
        IAS,
        Flowcal
    }
}
</script>
