<template>
    <DashBoardComponent>
        <div slot="slot-pages" class="content-pages">
            <header class="title_pages">
                <p>Início</p>
            </header>

            <CardsComponent />


        </div>
    </DashBoardComponent>
</template>

<script>
import DashBoardComponent from '../DashBoard/DashBoardComponent';
import CardsComponent from '../../components/CardsComponent';

export default {
    components: {
        DashBoardComponent,
        CardsComponent,
    }

}
</script>

<style lang="scss" scoped />

