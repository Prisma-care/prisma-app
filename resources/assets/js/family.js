var app = new Vue({
  el: '#root',
  data : {
    firstrun : false,
    firstname : '',
    lastname : '',
    email : '',
    showAddFamily : false,
    familyMembers: [
    { "id": 1, "name": "Georgette", "relationship": "Vrouw", "email": "georgette@gmail.com", "numStories": 11 },
    { "id": 2, "name": "Philipe", "relationship": "Zoon", "email": "philippe.feron@gmail.com", "numStories": 16}
    ]
  },
  computed : {
    isValid() {
      return (this.firstname != '' && this.lastname != '' && this.email != '') ? false : 'disabled';
    }
  }
}) 