panel.plugin('bruno/panel-theme', {
    login: {
        computed: {
            title() {
                return this.$store.state.system.info.title;
            }
        },
        template: `
        <div class="face-login-form">
            <h1>{{ title }}</h1>
            <br>
            <k-login />
        </div>
        `
    }
});