<form action="/clientmoraladd" method="post">
  @csrf
<div class="form-group">
            <label for="nom_entreprise">Nom entreprise</label>
            <input type="text" name="nom_entreprise" class="form-control" id="nom_entreprise" placeholder="Veuiller entrer le nom entreprise">
             
          </div> 
          <div class="form-group">
            <label for="adresse_entreprise">Adresse entreprise</label>
            <input type="text" name="adresse_entreprise" class="form-control" id="adresse_entreprise" placeholder="Veuillez entrer adresse">
             
          </div> 
 
          <div class="form-group">
            <label for="telephone">Telephone</label>
            <input type="text" name="telephone" class="form-control" id="telephone" placeholder="Veuillez enttrer le telephone">
             
          </div> 
 
 
          <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" id="email" placeholder="Veuiller entrer email ">
             
          </div>  
          <div class="form-group">
            <label for="type_entreprise">Type entreprise</label>
            <input type="text" name="type_entreprise" class="form-control" id="type_entreprise" placeholder="Veuillez entrer type entreprise">
             
          </div> 

  <div class="form-group">
            <label for="raison_social">Raison social</label>
            <input type="text" name="raison_social" class="form-control" id="raison_social" placeholder="Veuillez  entrer  la raison_social">
             
          </div> 

  <div class="form-group">
            <label for="identifiant_entreprise">Identifiant entreprise</label>
            <input type="text" name="identifiant_entreprise" class="form-control" id="identifiant_entreprise" placeholder="Veuiller entrer l'identifiant entreprise">
             
          </div> 
   
          <div class="form-group">
           <button type="submit" id="send_form" class="btn btn-success">Submit</button>
          </div>
          
        </form>