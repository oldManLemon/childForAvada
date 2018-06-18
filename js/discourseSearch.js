// Here starts Infodoc Search

function discourseForm(event) {

    event.preventDefault();

    //goInfobase();
    searchDiscourse();

}
var form = document.getElementById('discourseSearch');

form.addEventListener('submit', discourseForm);

function searchDiscourse() {
var baseURL = 'http://forums.bornhorstward.com.au/search?q=';
var input = document.getElementById('searchInput').value;
window.open(baseURL + input);


}
    
