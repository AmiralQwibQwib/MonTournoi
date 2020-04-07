<main>
	<form id="contact" action="indexAdmin.php?action=dashboard" method="post">
        <p>
			<label for="idadmin">Identifiant :</label>
			<input type="text" name="idadmin" id="idadmin" placeholder="identifiant" required>
		</p> 
		<p>
			<label for="pswadmin">Mot de passe :</label>
			<input type="text" name="pswadmin" id="pswadmin" placeholder="mot de passe" required>
		</p>
        <button type="submit" id="load">Login</button>
		<button type="reset">Cancel</button>
    </form>
</main>