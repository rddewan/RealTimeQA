<template>
<div>
    <toolbar></toolbar>
    <!-- component matched by the route will render here -->
    <router-view></router-view>
    <app-footer></app-footer>

</div>

    
</template>

<script>
import toolbar from './Toolbar'
import appFooter from './AppFooter'
import login from './login/Login'

export default {
    components:{toolbar,appFooter,login}

}
</script>

<style>

</style>
