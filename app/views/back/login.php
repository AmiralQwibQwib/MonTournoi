<main>
	<form id="contact" form="POST" action="indexAdmin.php?action=login" method="post">
        <p>
			<label for="loginAdmin">Identifiant :</label>
			<input type="text" name="name" id="loginAdmin" placeholder="identifiant" required>
		</p> 
		<p>
			<label for="pswAdmin">Mot de passe :</label>
			<input type="text" name="pass" id="pswAdmin" placeholder="mot de passe" required>
		</p>
        <button type="submit" id="load">Login</button>
		<button type="reset">Cancel</button>
    </form>
</main>