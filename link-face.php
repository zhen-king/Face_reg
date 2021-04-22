$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.luxand.cloud/token/" . $_POST["face_token"],
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => [ 
        "id" => $account_id // account_id can be email, username or numerical ID
    ], 
    CURLOPT_HTTPHEADER => array( "token: 9caf6e357ba1472598b8c60ce16adf5a" )
));

curl_exec($curl);
curl_close($curl);