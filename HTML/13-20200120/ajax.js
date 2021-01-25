function ghetToiDi() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var kieuDuLieu = this.responseText;
            var duLieuNe = JSON.parse(kieuDuLieu);
            var taBle = document.getElementById('table');
            for (var i = 0; i < duLieuNe.users.length; i++) {
                var tr = document.createElement('tr');
                for (var j = 0; j < duLieuNe.users[i].length; j++) {
                    var td = document.createElement('td');
                    // td chua co du lieu de in ra
                    td.innerHTML = td;
                    td.innerHTML = duLieuNe.users;
                    td.appendChild(duLieuNe.users);
                    tr.appendChild(td);
                }
                taBle.appendChild(tr);
            }
            // console.log([i]);
            // console.log(duLieuNe.users[0]);
            // console.log(duLieuNe.users[1]);
            // console.log(duLieuNe.users);
            document.getElementById('table').innerHTML = taBle;
        }
    };
    xhttp.open(
        "GET", "https://namcoi.com/du-an/aptech-php-laravel-crud-user/public/api/users", true
    );
    xhttp.send();
}