<template>
    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="http://company.meeguyang.com">
                <img src="" alt="3S-Phonebook" width="122" height="28">
            </a>

            <div class="navbar-menu is-active">
                <router-link class="navbar-item" to="/home">Home</router-link>
                <router-link class="navbar-item" to="/about">About</router-link>                
            </div>  
            
            <div class="navbar-burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>
</template>
