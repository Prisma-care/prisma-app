var app = new Vue({
  el: '#root',
  data: {
    firstrun: false,
    residentName: 'Lea',
    firstname: '',
    lastname: '',
    email: '',
    showAddFamily: false,
    step: 1,
    example: {
      general: `Ik wil van oma al haar mooie herinneringen en verhalen vastleggen, zodat we haar leven mooi kunnen documenteren.
      Om dit te doen is er een applicatie genaamd Prisma.
      Heb je deze week ergens een halfuurtje om een verhaal met een foto toe te voegen?
      Deze foto's kunnen van haar zelf zijn, maar je kan ook gerust een foto van het internet gebruiken.
      Hieronder vind je een link naar een formulier waar je het verhaal kan toevoegen en de andere om het verhaal te bekijken op haar profiel.
      Groetjes Cedric`,
      digital: `Ik wil van oma al haar mooie herinneringen en verhalen vastleggen, zodat we haar leven mooi kunnen documenteren.
      Om dit te doen is er een applicatie genaamd Prisma.
      Heb je deze week ergens een halfuurtje om een verhaal met een foto toe te voegen?
      Deze foto's kunnen van haar zelf zijn, maar je kan ook gerust een foto van het internet gebruiken.
      Hieronder vind je een link naar een formulier waar je het verhaal kan toevoegen en de andere om het verhaal te bekijken op haar profiel.
      Groetjes Cedric`,
      interview: `Ik wil van oma al haar mooie herinneringen en verhalen vastleggen, zodat we haar leven mooi kunnen documenteren.
      Om dit te doen is er een applicatie genaamd Prisma.
      Heb je deze week ergens een halfuurtje om een verhaal met een foto toe te voegen?
      Deze foto's kunnen van haar zelf zijn, maar je kan ook gerust een foto van het internet gebruiken.
      Hieronder vind je een link naar een formulier waar je het verhaal kan toevoegen en de andere om het verhaal te bekijken op haar profiel.
      Groetjes Cedric`,
      search: `Ik wil van oma al haar mooie herinneringen en verhalen vastleggen, zodat we haar leven mooi kunnen documenteren.
      Om dit te doen is er een applicatie genaamd Prisma.
      Heb je deze week ergens een halfuurtje om een verhaal met een foto toe te voegen?
      Deze foto's kunnen van haar zelf zijn, maar je kan ook gerust een foto van het internet gebruiken.
      Hieronder vind je een link naar een formulier waar je het verhaal kan toevoegen en de andere om het verhaal te bekijken op haar profiel.
      Groetjes Cedric`
    },
    current_example: "general",
    form: {
      firstname: "",
      lastname: "",
      email: "",
      subject: ""
    },
    message: "",
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
    ]
  },

  computed: {
    isValid() {
      return (this.form.firstname !== "",
          this.form.lastname !== "",
          this.form.email !== "",
          this.form.subject !== "") ?
        false :
        "disabled";
    },
    isValidMessage() {
      return this.message !== "" && this.message.length >= 5 ?
        false :
        "disabled";
    }
  },
  methods: {
    prev() {
      this.step--;
    },
    next() {
      this.step++;
    },
    changeExample(e) {
      this.current_example = e.target.value;
      e.target.value.addClass;
    }
  }
})