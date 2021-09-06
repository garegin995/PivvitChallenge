<template>
    <div>
    <b-navbar toggleable="lg" type="dark" variant="info">
        <b-navbar-nav>
            <b-nav-item to="/donations">Donations</b-nav-item>
            <b-nav-item to="/donations/create">Create Donation</b-nav-item>
        </b-navbar-nav>

        <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

        <b-collapse id="nav-collapse" is-nav>
            <b-navbar-nav  class="ml-auto">
                <b-nav-item to="/sign-out">Sign Out</b-nav-item>
            </b-navbar-nav>
        </b-collapse>
    </b-navbar>
    </div>
</template>

<script>
    export default {
        name: 'Navbar'
    }
</script>
