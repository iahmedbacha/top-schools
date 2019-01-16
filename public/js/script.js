$(document).ready(function(){
    $('#categorie').on('change',function(){
      $('#formation1').html('');
      $('#formation2').html('');
        var id_categorie = $(this).val();
        if(id_categorie){
            $.ajax({
                type:'POST',
                url:'http://localhost/EcoleComparateur/ecole/show1/'+id_categorie,
                data:'id='+id_categorie,
                success:function(html){
                    $('#ecoles1').html(html);
                    $('#ecoles2').html(html); 
                }
            }); 
        }else{
            $('#ecoles1').html('<option value="">Select categorie first</option>');
            $('#ecoles1').html('<option value="">Select categorie first</option>'); 
        }
    });

    $('#ecoles1').on('change',function(){
        var id_ecole = $(this).val();
        if(id_ecole){
            $.ajax({
                type:'POST',
                url:'http://localhost/EcoleComparateur/formation/show1/'+id_ecole,
                data:'id='+id_ecole,
                success:function(html){
                    $('#formation1').html(html);
                    calculateTTC();
                }
            });
            $.ajax({
                type:'POST',
                url:'http://localhost/EcoleComparateur/commentaire/show1/'+id_ecole,
                data:'id='+id_ecole,
                success:function(html){
                  console.log(html);
                    $('#commentaire1').html(html);
                }
            });
        }
    });

    $('#ecoles2').on('change',function(){
        var id_ecole = $(this).val();
        if(id_ecole){
            $.ajax({
                type:'POST',
                url:'http://localhost/EcoleComparateur/formation/show1/'+id_ecole,
                data:'id='+id_ecole,
                success:function(html){
                  console.log(html);
                    $('#formation2').html(html);
                    calculateTTC();
                }
            });
            $.ajax({
                type:'POST',
                url:'http://localhost/EcoleComparateur/commentaire/show1/'+id_ecole,
                data:'id='+id_ecole,
                success:function(html){
                    $('#commentaire2').html(html);
                }
            });
        }
    });

    calculateTTC();
    $("#table").DataTable({
      "paging": false,
      "searching": false,
      "info": false
    });

    $("#search-input").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#table tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
    feather.replace({ class: 'feather-icon'});
  });

function calculateTTC () {
  var ttc = $('.ttc').each(function(index) {
    var taxe = $(this).prev();
    var ht = taxe.prev();
    var ttc = (parseInt(taxe.text())*parseInt(ht.text())/100);
    $(this).text(ttc);
  });
}