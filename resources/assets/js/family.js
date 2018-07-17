var app = new Vue({
  el: '#root',
  data: {
    firstrun: false,
    firstname: '',
    lastname: '',
    email: '',
    email_body: '',
    subject: '',
    showAddFamily: false,
    familyMembers: [{
        "id": 1,
        "name": "Georgette",
        "relationship": "Vrouw",
        "email": "georgette@gmail.com",
        "numStories": 11
      },
      {
        "id": 2,
        "name": "Philipe",
        "relationship": "Zoon",
        "email": "philippe.feron@gmail.com",
        "numStories": 16
      }
    ],
    email_body: {
      digital: `Dag oma <br> Ik wil van oma al haar mooie herinneringen en verhalen vastleggen, zodat we haar leven mooi kunnen documenteren. Om dit te doen is er een applicatie genaamd Prisma. Heb je deze week ergens een halfuurtje om een verhaal met een foto toe te voegen? Deze foto's kunnen van haar zelf zijn, maar je kan ook gerust een foto van het internet gebruiken. Hieronder vind je een link naar een formulier waar je het verhaal kan toevoegen en de andere om het verhaal te bekijken op haar profiel. Groetjes Cedric`,
      story: ` Ik wil van oma al haar mooie herinneringen en verhalen vastleggen, zodat we haar leven mooi kunnen documenteren. Om dit te doen is er een applicatie genaamd Prisma. Heb je deze week ergens een halfuurtje om een verhaal toe te voegen? Hieronder vind je een link naar een formulier waar je het verhaal kan toevoegen en de andere om het verhaal te bekijken op haar profiel. Groetjes Cedric`,
      youtube: `Ik wil van oma al haar mooie herinneringen en verhalen vastleggen, zodat we haar leven mooi kunnen documenteren. Om dit te doen is er een applicatie genaamd Prisma. Heb je deze week ergens een halfuurtje om een verhaal met een YouTube video toe te voegen? Hieronder vind je een link naar een formulier waar je het verhaal kan toevoegen en de andere om het verhaal te bekijken op haar profiel. Groetjes Cedric`,
      general: ``
    },
    current_body: "digital"
  },
  computed: {
    isValid() {
      return (this.firstname != '' && this.lastname != '' && this.email != '') ? false : 'disabled';
    }
  },
  methods: {
    changeBody(e) {
      this.current_body = e.target.value;
    }
  }
})