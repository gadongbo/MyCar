const params = new Proxy(new URLSearchParams(window.location.search), {
  get: (searchParams, prop) => searchParams.get(prop),
});
const pageLayout = params.page_layout;
const domSideBar = document.getElementById(pageLayout);
// console.log('test', document.querySelectorAll('#sidebarMenu .nav-link'));
document.querySelectorAll("#sidebarMenu .nav-link").forEach((nodeItem) => {
  nodeItem.classList.remove("active");
});
domSideBar.classList.add("active");
