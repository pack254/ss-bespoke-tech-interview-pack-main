import { createApp } from 'vue';
import FlyoutPanel from './components/FlyoutPanel.vue';

const RootApp = {
    components: {
        FlyoutPanel,
    },
    data() {
        return {
            mobileMenuOpen: false,
        };
    },
    methods: {
        closeMobileMenu() {
            this.mobileMenuOpen = false;
        },
        openMobileMenu() {
            this.mobileMenuOpen = true;
        },
    },
};

const app = createApp(RootApp);
app.mount("#app");
