</div>
<div class="modal-footer col-sm-10 col-xs-10">
            <button type="submit" class="btn btn-success" name="valider" value="valider" >Submit</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        </div>

        <?php
                if (isset($_POST["valider"])){
                $pseudo = htmlspecialchars($_POST["login"]);
                $pwd = htmlspecialchars($_POST["password"]);
                $sql = sprintf("SELECT * FROM admin WHERE admin_username = '%s' OR admin_password = '%s'", $pseudo, $pwd );
                $result_sql = $bdd->query($sql);
                $row = $result_sql->fetch();

                if (!empty($row)){
                
                    $_SESSION['identifier'] = $row["admin_username"];
                    $_SESSION['admin_id'] = $row["admin_id"];
                    header("Location: ?p=admin");
                };
                echo "Identifiant ou mot de passe incorrect";
            };
            
        
?>


    </div>
    </div>
    </div>