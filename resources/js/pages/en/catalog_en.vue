<template>
    <div>
        <!-- IAS Image analysis web application -->
        <IAS />

        <!-- FlowCal flowcytomery analysis Web application -->
        <Flowcal />
    </div>
</template>

<script>
import IAS from '~/components/en/catalog/IAS'
import Flowcal from '~/components/en/catalog/Flowcal'

export default {
    components: {
        IAS,
        Flowcal
    }
}
</script>
