export default function auth(to, from, next) {
    if (!localStorage.getItem("token")) {
        console.log("halo");
        // return $this.router.push({ path: "/login" });
        next("/login");
    }

    return next();
}
