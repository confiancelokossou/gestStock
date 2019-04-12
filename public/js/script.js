//mes variables globales
var nom = "", adresse = "", ville ="", mail ="", telephone ="", pays ="", option ="";
var nbOcc = 0;
$(document).ready(function ()
 {
    $(".btnmodcateg").click(function(){

       var tab = $("input[name = radioCateg ]:checked").val();
       tab = tab.split(";#;");
       $("#eiCodCateg").val(tab[1]);
       $("#eiLibCateg").val(tab[2]);


    });

    $("#addItemCmder").click(function(){
       nbOcc++;
      $("#addLineCmder").append('<tr id="idtrcmder'+nbOcc+'" class="sansBorduretr" ><td><input type="radio" name="radiotrcmder"></td> <td><input type="hidden" id="cmderref'+nbOcc+'" value="'+$("#iajoutlib").val()+'" class="sansBordure" ><input type="text" id="cmderlib" value="'+$("#iajoutlib option:selected").text()+'" class="sansBordure" disabled></td><td><input type="hidden" id="cmderprix'+nbOcc+'" value="'+$("#iajoutprix").val()+'" class="sansBordure col-lg-12" disabled><input type="text" id="cmderqte'+nbOcc+'" class="col-lg-12 sansBordure" value="'+$("#iajoutqte").val()+'" disabled></td><td><input type="text" id="MontantCmder'+nbOcc+'" class="col-lg-12 sansBordure" value="'+$("#iajoutqte").val() * $("#iajoutprix").val()+'" disabled></td></tr>');

    });

    $("button.deltrcmder").click(function(){
        if(confirm("voulez-vous supprimer cette ligne ?")==true && $("input[name = radiotrcmder]").is(':checked') ){
            $("tr:has(input[name = radiotrcmder]:checked)").remove();
            nbOcc--;
        }

    });


    $('#btnEnregistrerCmd').click(function(){
        var i;
        for(i=1; i<=nbOcc; i++){
            alert($("#cmderref"+i).val()+" - "+$("#cmderprix"+i).val()+" - "+$("#cmderqte"+i).val()+" - "+$("#MontantCmder"+i).val()+"\n")
        }
    });


    $("#addItemVente").click(function(){
        var iCodPro, iPrixProd, prod = $("#iAjoutProduit").val();
        prod = prod.split(";#;");
        iCodPro = prod[0];
        iPrixProd = prod[1];
        nbOcc++;
        $("#addLineVente").append('<tr id="idtrvente'+nbOcc+'" class="sansBorduretr"><td><input type="radio" name="radiotrVente"></td> <td><input type="hidden" id="venteRef value="'+iCodPro+'" class="sansBordure"><input type="text" id="Ventelib" value="'+$("#iAjoutProduit option:selected").text()+'" class="sansBordure" disabled></td><td><input type="hidden" id="iPrixProd" value="'+iPrixProd+'" class="sansBordure col-lg-12" disabled><input type="text" id="venteqte" class="col-lg-12 sansBordure" value="'+$("#iAjoutQte").val()+'" disabled></td><td><input type="text" id="MontantVente" class="col-lg-12 sansBordure" value="'+iPrixProd * $("#iAjoutQte").val()+'" disabled></td></tr>');

     });



     $("button.deltrvente").click(function(){
        if(confirm("voulez-vous supprimer cette ligne ?")==true && $("input[name = radiotrVente]").is(':checked') ){
            $("tr:has(input[name = radiotrVente]:checked)").remove();
            nbOcc--;
        }

    });
/*************************LES DATATABLES******************************* */
    $(function (){
        $('#tableFournisseur').DataTable();
    });

    $(function () {
        $('#tableClient').DataTable();
    });

    $(function(){
        $('#tableProduit').DataTable();
    });

         /*************************** FOURNISSEUR ***************************/
      //Ajout d'un fournisseur
      $('#form').on('submit', function(e){
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: '/addFournisseur',
                data: $('#form').serialize(),
                success: function(response){
                    console.log(response);
                    $('#modal-createFournisseur').modal('hide');
                    alert('Enregistrement effectué avec succès');
                    location.reload();
                },
                error: function(error){
                    console.log(error);
                },
            });
      });

      //Modification d'un fournisseur
      $('.editFour').on('click', function(){
            $('#modal-editFournisseur').modal('show');
            $tr =  $(this).closest('tr');

            var data = $tr.children('td').map(function(){
                return $(this).text();
            }).get();
          //  console.log(data);
            $('#id').val(data[0]);
            $('#nom').val(data[1]);
            $('#adresse').val(data[2]);
            $('#pays').val(data[3]);
            $('#ville').val(data[4]);
            $('#mail').val(data[5]);
            $('#telephone').val(data[6]);
      });

      $("#editFourform").on('submit', function(e){
            e.preventDefault();
            var id = $('#id').val();
            $.ajax({
                type: 'PUT',
                url: '/editFournisseur/'+id,
                data: $('#editFourform').serialize(),
                success:function(response){
                    console.log(response);
                    $('#modal-editFournisseur').modal('hide');
                    alert('Modification effectuée avec succès');
                    location.reload();
                },
                error: function(error){
                    console.log(error);
                },
            });
      });

      //suppression du fournisseur
      $('.deleteFour').on('click', function(){
            $('#modalDeleteFour').modal('show');
            $tr =  $(this).closest('tr');
            var data = $tr.children('td').map(function(){
                return $(this).text();
            }).get();
            console.log(data);
            $('#deleteIdFour').val(data[0]);
      });

      $('#deleteFourForm').on('submit', function(e){
        e.preventDefault();
        var id = $('#deleteIdFour').val();
        $.ajax({
            type: 'DELETE',
            url: '/destroyFournisseur/'+id,
            data: $('#deleteFourForm').serialize(),
            success: function(response){
                console.log(response);
                $('#modalDeleteFour').modal('hide');
                alert('Enregistrement supprimé avec succès');
                location.reload();
            },
             error: function(error){
                 console.log(error);
            },
        });
      });


              /*************************** CLIENT***************************/

      //Ajout d'un client
      $('#addClientForm').on('submit', function(e){
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/addClient',
            data:  $('#addClientForm').serialize(),
            success: function(response){
                console.log(response);
                $('#modal-createClient').modal('hide');
                alert('Client ajouté avec succès');
                location.reload();
            },
            error: function(error){
                console.log(error);
            }
        });
      });


      //Modification des informations du client

      $('.editClient').on('click', function(){
            $('#modal-editClient').modal('show');
            $tr = $(this).closest('tr');
            var data = $tr.children('td').map(function(){
                return $(this).text();
            }).get();

            console.log(data);
            $('#idClient').val(data[0]);
            $('#nomClient').val(data[1]);
            $('#adresseClient').val(data[2]);
            $('#pays').val(data[3]);
            $('#villeClient').val(data[4]);
            $('#mailClient').val(data[5]);
            $('#telephoneClient').val(data[6]);
      });

      $('#editClientForm').on('submit', function(e){
            e.preventDefault();
            var id = $('#idClient').val();
            $.ajax({
                type:'PUT',
                url: '/editClient/'+id,
                data: $('#editClientForm').serialize(),
                success: function(response){
                    console.log(response);
                    $('#modal-editClient').modal('hide');
                    alert('Modification effectuée avec succès');
                    location.reload();
                },
                error: function(error){
                    console.log(error);
                },
            });
      });

      //Suppression du client
      $('.deleteClient').on('click', function(){
            $('#modalDeleteClient').modal('show');
            $tr =  $(this).closest('tr');
            var data = $tr.children('td').map(function(){
                return $(this).text();
            }).get();
            console.log(data);
            $('#deleteIdClient').val(data[0]);
      });

      $('#deleteClientForm').on('submit', function(e){
            e.preventDefault();
            var id = $('#deleteIdClient').val();
            console.log(id);
            $.ajax({
                type: 'DELETE',
                url: '/destroyClient/'+id,
                data: $('#deleteClientForm').serialize(),
                success: function(response){
                    console.log(response);
                    $('#modalDeleteClient').modal('hide');
                    alert('Enregistrement supprimé avec succès');
                    location.reload();
                },
                error: function(error){
                    console.log(error);
                },
            });
      });



      /***********************PRODUIT ET CATEGORIE DE PRODUIT************************ */
      //Ajout d'un produit
      $('#nv').hide();
      $('#nouvelleCategorie').on('click', function(){
            $('#selectCategorie').slideToggle();
            $('#nv').slideToggle();
      })

      $('#addProduitForm').on('submit', function(e){
            e.preventDefault();
            var data = $('#addProduitForm').serialize();
            console.log(data);
            $.ajax({
                type: 'POST',
                url: '/addProduit',
                data: $('#addProduitForm').serialize(),
                success: function(response){
                    console.log(response);
                    $('#modal-createProduit').modal('hide');
                    alert('Enregistrement éffectué avec succès');
                    location.reload();
                },
                error: function(error){
                    console.log(error);
                },
            });
      });

      //Modification d'un produit
      $('.editProduit').on('click', function(){
        $('#modal-editProduit').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children('td').map(function(){
            return $(this).text();
        }).get();

        $('#editId').val(data[0]);
        $('#editLibelle').val(data[1]);
        $('#editQte').val(data[2]);
        $('#editPrix').val(data[3]);
        $('#editStockMinimal').val(data[5]);
        $('#editSeuilAlerte').val(data[6]);
        $('#categorie').val(data[7]);
      });

      $('#editProduitForm').on('submit', function(e){
            e.preventDefault();
            var id = $('#editId').val();
            $.ajax({
                type: 'PUT',
                url: '/editProduit/'+id,
                data: $('#editProduitForm').serialize(),
                success: function(response){
                    console.log(response);
                    $('#modal-editProduit').modal('hide');
                    alert('Modification éffectuée avec succès');
                    location.reload();
                },
                error: function(error){
                    console.log(error);
                },
            });
      });

      //Suppressio d'un produit
      $('.deleteProduit').on('click', function(){
        $('#modalDeleteProduit').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children('td').map(function(){
            return $(this).text();
        }).get();

        $('#deleteId').val(data[0]);
    });

    $('#deleteProduitForm').on('submit', function(e){
        e.preventDefault();
        var id = $('#deleteId').val();
        console.log(id);
        $.ajax({
            type: 'DELETE',
            url: '/destroyProduit/'+id,
            data: $('#deleteProduitForm').serialize(),
            success: function(response){
                console.log(response);
                $('#modalDeleteProduit').modal('hide');
                alert('Enregistrement supprimé avec succès');
                location.reload();
            },
            error: function(error){
                console.log(error);
            },
        });
  });








});
