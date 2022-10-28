
<?php 
class Login extends CI_Controller{

public function login() {

    //ici on charge les choses d'ont on auras besoin tel que la base de données ou comment faire un formulaire
    $this->load->library(['form_validation','session']);
    $this->load->database();

        //on dit ce que ont veut recuperer imperativement
        $this->form_validation->set_rules('login', 'Login', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        
        //ligne pour savoir si le formulaire est lancer ou pas
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login_view');

        } else {

            //Pour avoir ce qu'a rentrer l'utilisateur dans l'input avec name="login" $this->input->post('login')  
            //l'input est dans le "view" la page en html sous cette forme <input type="email" class="form-control" value="<?php echo set_value('email');" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">


            //ici on affecte au variable ce que l'utilisateurs a mis en input
            $login = $this->input->post('login');
            $password = $this->input->post('password');

            //ici affecte a la variable $user tout les resultat ou le login apparait dans la base de données
            //d'ou le "get_where('nom de la base de données',['nom de la collone' => informations a chercher])->row();"
            //si la variable est vide alors l'utilisateur n'existe pas car l'informations chercher n'existe pas
            //exemple, si ont cherche 'uncomauhasard' il ne vas pas trouver dans la collone login, il vas donc renvoyer du vide
            //alors que si on cherche quelque choses qui existe la variable ne seras pas vide car elle auras trouver un resultat
            $user = $this->db->get_where('utilisateur',['login' => $login])->row();
            
            //quand ont met un "!" avant une variable ont demande si elle est vide ou pas
            if(!$user) {
                $this->session->set_flashdata('login_error', 'Please check your email or password and try again.', 300);
                redirect(uri_string());
            }

            //on fait de meme pour le mot de passe, si la variable est vide alors il n'y a pas de mot de passe correspondant
            //entre ce que a remplit l'utilisateur et ce qu'il y a dans la base de données
            //md5 permet de "hasher" le mot de passe pour transformer 1234 en ce qui se trouve dans la base
            if(!password_verify((md5($password)==$user->password)) {
                $this->session->set_flashdata('login_error', 'Please check your email or password and try again.', 300);
                redirect(uri_string());
            }


            //ici on créer un tableau que l'ont affecte a "$data" mettez les informations de la base de données !
            $data = array(
                    'user_id' => $user->user_id,
                    'first_name' => $user->nom,
                    'last_name' => $user->prenom,
                    'email' => $user->email,
                    );

            //ici on affecte a la session en cour les données recuperer plus haut
            // ce qui peut servir si ont en a besoin sur une autre page !
            $this->session->set_userdata($data);


            
            
            //pour savoir si un utilisateur est un agent ou un client !
            //"$variable->quelquechoses" est lequivalent de "$variable['quelquechoses'] en codeigniter"
            // "==" permet de demander si cest egale a 
            if($user->type_utilisateur=="agent"){
                echo 'Login success! agent ;)';
                redirect('agent');
            }
            //tout les autres type qui ne sont pas agent vont ici
            else{
            //un redirect permet de renvoyer a une autre page pratique si ont veut passer a une autre page directement !
            redirect('/'); // redirect to home
            echo 'Login success!'; exit;
            }

            
        }        
    }

    // fonction de deconnexion
    public function logout(){
        $this->session->sess_destroy();
        redirect('user/login');
    }
}
?>