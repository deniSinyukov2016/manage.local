import dashboard from "./components/pages/dashboard.vue"
import projects from "./components/pages/projects.vue"
import list_projects from "./components/projects/List-projects.vue"

export const routes = [
    { path: "/dashboard", component: dashboard},
    { path: "/projects", component: projects},
]
