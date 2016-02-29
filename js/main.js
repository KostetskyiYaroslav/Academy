function authorization(){
    $login = document.getElementById("user-login").value;
    $password = document.getElementById("user-password").value;

    $response = $.ajax({
        url:"architecture/DAL/account.php?login=" + $login + "&password=" + $password,
        method: "GET"
    }).done(function (data) {
        if(data === 'TRUE'){
            alert("Welcome to the personal cabinet!");
            window.location.replace("page.php?page=Home");
        } else if(data === 'FALSE') {
            alert("Login or Password is wrong!");
        }
    });
}

function getArrayData(sort, byWhat){

    if(typeof sort == "object"){
        sort = 'id';
    }

    $('.table-body.contact').remove();

    var contacts = [];

    $response = $.ajax({
        url:"architecture/Controller/Controller.php?sortField=" + sort +"&byWhat="+byWhat+"&search=0",
        method: "GET"
    }).done(function (data) {
        contacts = JSON.parse(data);
        addRemovedTable();
        contacts.forEach(function(contact, i, contacts) {
            addContactInTable(contact);
        });
    });

}

function changeSortBy(){

    $(".table-head-template").remove();

    $(".table-head").append(
        '<tr class="table-head-template">'+
        '<th id="id">'+
        '<a class="btn-blu" onclick="getArrayData(\'id\', \'desc\')">ID</a>'+
        '</th>'+
        '<th id="firstName">'+
        '<a class="btn-blue" onclick="getArrayData(\'firstName\', \'desc\')"> FIRST NAME </a>'+
        '</th>'+
        '<th id="lastName">'+
        '<a class="btn-blue" onclick="getArrayData(\'lastName\', \'desc\')">LAST NAME</a>'+
        '</th>'+
        '<th id="patronymic">'+
        '<a class="btn-blue" onclick="getArrayData(\'patronymic\', \'desc\')">PATRONYMIC</a>'+
        '</th>'+
        '<th id="phone">'+
        '<a class="btn-blue" onclick="getArrayData(\'phone\', \'desc\')">PHONE</a>'+
        '</th>'+
        '</tr>'
    );
    getArrayData('id', 'desc');
}

function search(){
    $('.table-body.contact').remove();

    var searchName = document.getElementById("input-search-field").value;
    var contacts = [];

    $response = $.ajax({
        url:"architecture/Controller/Controller.php?sortField=0&search="+searchName,
        method: "GET"
    }).done(function (data) {
        contacts = JSON.parse(data);

        addRemovedTable();

        contacts.forEach(function(contact, i, contacts) {
            addContactInTable(contact);
        });
    });
}

function addRemovedTable() {
    $('.table-contacts').append(
        "<tbody class='table-body contact' id='contact-list'>" +
        "</tbody>"
    );
}

function addContactInTable(contact) {
    var id          = contact.id;
    var firstName   = contact.firstName;
    var lastName    = contact.lastName;
    var patronymic  = contact.patronymic;
    var phone       = contact.phone;

    $('.table-body.contact').append(
        "<tr>" +
        "<th>" + id            + "</th>" +
        "<th>" + firstName     + "</th>" +
        "<th>" + lastName      + "</th>" +
        "<th>" + patronymic    + "</th>" +
        "<th>" + phone         + "</th>" +
        "</tr>"
    );
}

function authorizationMeta(){
    loginMeta = document.getElementById("meta-login").value;
    passwordMeta = document.getElementById("meta-password").value;

    responce = $.ajax({
        url:"http://passport.meta.ua/account/index?login=" + loginMeta + "&password=" + passwordMeta,
        method: "GET",
        dataType: 'jsonp',
        crossDomain: true
    }).done(function (data) {
            console.log('Hello');
    });

}