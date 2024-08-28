function confirmDelete() {
    var confirmar = confirm("¿Realmente desea eliminarlo?");
    if (confirmar) {
        return true;
    } else {
        return false;
    }
}