function closeEditBandForm(bandId) {
    let form = document.getElementById('band-id-' + bandId);
    form.style.display = 'none';
}
function closeDeleteBandMessage(bandId) {
    let form = document.getElementById('delete-band-id-' + bandId);
    form.style.display = 'none';
}
function closeBanMessage(uid) {
    let form = document.getElementById('ban-member-id-' + uid);
    form.style.display = 'none';
}
function closeUnbanMessage(uid) {
    let form = document.getElementById('unban-member-id-' + uid);
    form.style.display = 'none';
}
function closeEditProdForm(pid) {
    let form = document.getElementById('prod-id-' + pid);
    form.style.display = 'none';
}
function closeDeleteProdMessage(pid) {
    let form = document.getElementById('delete-prod-id-' + pid);
    form.style.display = 'none';
}
function closeEditGenreForm(gid) {
    let form = document.getElementById('genre-id-' + gid);
    form.style.display = 'none';
}
function closeEditBlogForm(bid) {
    let form = document.getElementById('blog-id-' + bid);
    form.style.display = 'none';
}