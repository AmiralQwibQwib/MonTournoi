<main>
	<form id="contact" action="indexAdmin.php?action=dashboard" method="post">
        <p>
			<label for="loginAdmin">Identifiant :</label>
			<input type="text" name="loginAdmin" id="loginAdmin" placeholder="identifiant" required>
		</p> 
		<p>
			<label for="pswAdmin">Mot de passe :</label>
			<input type="text" name="pswAdmin" id="pswAdmin" placeholder="mot de passe" required>
		</p>
        <button type="submit" id="load">Login</button>
		<button type="reset">Cancel</button>
    </form>
</main>