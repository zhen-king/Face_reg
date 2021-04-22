$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.luxand.cloud/token/" . $_POST["face_token"],
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => array( "token: 9caf6e357ba1472598b8c60ce16adf5a" )
));

$response = json_decode(curl_exec($curl));
curl_close($curl);

if ($response->status == "success")
    print("User ID is " . $response->id . "\n");
else {
    header("HTTP/1.0 401 Unauthorized");
    print("Couldn't find a user with this face\n");
}