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
    alert: false,
    message: "",
    example: `<p class="card-text">Met de familie verzamelen we verhalen van Lea die ik aan het rusthuis ga geven. Hiermee kan het personeel Lea dan beter leren kennen. </p>
    <p class="card-text">Help je mee? Kan je deze week de tijd nemen om enkele belangrijke foto's te scannen?</p>`,
    form: {
      firstname: "",
      lastname: "",
      email: "",
      subject: ""
    },
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
    isMessageFilled() {
      return (this.message.length <= 5) ? false : "disabled";
    },
    isValidMessage() {
      return (this.message !== "" && this.message.length >= 5) ?
        false :
        "disabled";
    },

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
    },
    fillMessage() {
      htmlMessage = this.example;
      plainMessage = htmlMessage.replace(/<[^>]+>/g, '');
      this.message = plainMessage;
    },
    send() {
      this.form.lastname = "";
      this.form.firstname = "";
      this.form.email = "";
      this.alert = true;
      setTimeout(() => {
        this.alert = false
      }, 5000)
    }
  }
})