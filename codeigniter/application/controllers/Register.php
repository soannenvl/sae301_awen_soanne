public function create (){
$this - >load - > helper ('form ');
$this - >load - > library (' form_validation ');
$this - > form_validation - > set_rules ('lastname ','Last name ','required ');
$this - > form_validation - > set_rules ('firstname ','First name ','required ');
$this - > form_validation - > set_rules ('id ','Student id ','required ');
$this - > form_validation - > set_rules ('email ','email ','required ');
if($this - > form_validation - > run ()=== FALSE ){
$data ['content ']= 'form ';
}
else {
$lastname =$this - >input - > post ('lastname ');
$firstname =$this - >input - > post ('firstname ');
$id=$this - >input - > post ('id ');
$email =$this - >input - > post ('email ');
$this - > internships_model - > add_student ($id , $lastname , $firstname , $email );
$data ['content ']= 'add_success ';
}
$this - >load - > vars ( $data );
$this - >load - > view ('template ');
}