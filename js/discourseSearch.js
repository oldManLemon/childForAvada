// Here starts Infodoc Search

function discourseForm(event) {

    event.preventDefault();

    //goInfobase();
    searchDiscourse();

}
var form = document.getElementById('discourseSearch');
var input = document.getElementById('searchInput');
var cleanString;
//Deal place the previous search into this search bar's place holder. 
var readAddressBar = window.location.href;
var theSplit = readAddressBar.split('=');
theSplit = theSplit[1].split('+');
cleanString = theSplit.join(' ');
input.value = cleanString;

form.addEventListener('submit', discourseForm);

function searchDiscourse() {
    var baseURL = 'http://forums.bornhorstward.com.au/search?q=';
 
    if (input == '') {
        alert("Please Enter Search Term!");

    } else {
        window.open(baseURL + input.value);
    }


}

