function changeInfo() {
    var name = prompt("Masukkan nama:");
    var jobTitle = prompt("Masukkan jabatan:");
    
    if (name && jobTitle) {
        document.getElementById("name").innerText = name;
        document.getElementById("job-title").innerText = jobTitle;
    }
}
