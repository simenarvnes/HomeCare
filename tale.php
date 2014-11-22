<script>
    
    $(function() {  
    $('#taleknapp').click(function(){
    
    var url = "?page=4";    
    var $this = $(this);

    if($this.hasClass('taleknapp')){
        $this.text('Tale');
    }
    else{
        //forandrer tekst og bakgrunn på knapp
        $this.text('Opptak');
        $this.css('background', 'red');
        
        //forandrer instruksjoner i bobbelen
        $('.bubble').text("Trykk på 'Opptak'- knappen for å avslute."); 
        
        //sender brukeren til neste siden
        $('#taleknapp').click(function(){
           $(location).attr('href',url); 
        });
    }
  });
});

</script>
<div class="bubble">Trykk på "Tale"- knappen og forklar hvordan du føler deg.</div>

<div id="taleknapp" class="knapp">Tale</div>

