#include "Network.h"

#define WIFI_SSID "XUANXUAN_2.GHz@unifi"
#define WIFI_PASSWORD "1234567890999"

// #define API_KEY "AIzaSyAsIlkYQFu9rExzhdpG5HHfnhEI66Unj-4"
// #define FIREBASE_PROJECT_ID "myx-baggage"
// #define USER_EMAIL "reader1@myxbaggage.com"
// #define USER_PASSWORD "Xu@n3309"

// static Network *instance = NULL;

Network::Network(){
  // instance = this;
}

void WiFiEventConnected(WiFiEvent_t event, WiFiEventInfo_t info){
    Serial.println("WIFI CONNECTED! WAITING FOR LOCAL IP ADDR");
}

void WiFiEventGotIP(WiFiEvent_t event, WiFiEventInfo_t info){
    Serial.print("LOCAL IP ADDRESS: ");
    Serial.println(WiFi.localIP());
    // instance->firebaseInit();
}

void WiFiEventDisconnected(WiFiEvent_t event, WiFiEventInfo_t info){
    Serial.println("WIFI DISCONNECTED!");
    WiFi.begin(WIFI_SSID, WIFI_PASSWORD);
}

void Network::initWiFi(){
    WiFi.disconnect();
    WiFi.onEvent(WiFiEventConnected, SYSTEM_EVENT_STA_CONNECTED);
    WiFi.onEvent(WiFiEventGotIP, SYSTEM_EVENT_STA_GOT_IP);
    WiFi.onEvent(WiFiEventDisconnected, SYSTEM_EVENT_STA_DISCONNECTED);
    WiFi.begin(WIFI_SSID, WIFI_PASSWORD);
}

// void Network::firebaseInit(){
//   config.api_key = API_KEY;

//   auth.user.email = USER_EMAIL;
//   auth.user.password = USER_PASSWORD;

//   Firebase.begin(&config, &auth);
// }

// void Network::firebaseDataUpdate(double tagID){
//   if(WiFi.status() == WL_CONNECTED && Firebase.ready()){
//     String documentPath = "";

//     FirebaseJson content;

//     content.set("", String(tagID).c_str());

//     if(Firebase.Firestore.createDocument(&fbdo, FIREBASE_PROJECT_ID, "", documentPath.c_str(), content.raw())){
//       Serial.printf("ok\n\%s\n\n", fbdo.payload().c_str());
//       return;
//     }else{
//       Serial.println(fbdo.errorReason());
//     }
//   }
// }