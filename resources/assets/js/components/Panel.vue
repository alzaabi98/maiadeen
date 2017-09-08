<template>
    <section>
     

        <b-panel :collapsible="isCollapsible" class="m-b-20">
            <strong slot="header"> {{lecture.title}}</strong>
            <div class="content">

            <table class="table is-fullwidth">

                <thead>
                    <td> Lecture title </td>
                    <td>  <i class="fa fa-clock-o"></i></td>
                </thead>
                <tr v-for="part in lecture.parts">
                    <td> {{part.name}} </td>
                    <td> {{part.time}}</td>
                </tr>

                
            </table>
            </div>
        </b-panel>
    </section>
</template>

<script>
    export default {
        props: ['lecture'],

        data() {
            return {
                isCollapsible: true
            }
        }
    }
</script>