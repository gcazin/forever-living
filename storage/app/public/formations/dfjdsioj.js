import React from 'react';
import { StyleSheet, Text, View, StatusBar } from 'react-native';
import { WebView } from 'react-native-webview';

export default function App() {
  return (
    <React.Fragment>
    <WebView
        source={{uri: 'https://www.tomorrow-insurance.com'}}
        style={{marginTop: 20}}
      />
      <StatusBar hidden={true} />
      </React.Fragment>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
    alignItems: 'center',
    justifyContent: 'center',
  },
});
