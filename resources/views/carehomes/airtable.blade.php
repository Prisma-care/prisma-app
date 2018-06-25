@extends ('layout')

@section ('content')


<div id="app">
  <ul>
    <li v-for="item in items">
      <p>@{{ item['fields']['Notes'] }}</p>
      <img :src="item['fields']['Attachments'][0]['thumbnails']['large']['url']" alt="" v-if="item['fields']['Attachments']">
    </li>
  </ul>
</div>

<script src="https://unpkg.com/vue"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.2/axios.min.js"></script>

<script type="text/javascript">
  var app = new Vue({
    el: '#app',
    data: {
      items: []
    },
    mounted: function(){
     this.loadItems(); 
   },
   methods: {
    loadItems: function(){
      // Init variables
      var self = this
      var app_id = "appzWizY3DXnCjpgh";
      var app_key = "keyuzHdBFw9QQKZCC";
      this.items = []
      axios.get(
        "https://api.airtable.com/v0/"+app_id+"/story?view=Feron",
        { 
          headers: { Authorization: "Bearer "+app_key } 
        }
        ).then(function(response){
          self.items = response.data.records
          console.log(response.data.records);
        }).catch(function(error){
          console.log(error)
        })
      }
    }
  })
</script>

@endsection