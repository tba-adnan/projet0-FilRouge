import React from 'react';
import ReactDOM from 'react-dom/client';

function Car() {
  return <h2>I am a Car!</h2>;
}


const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(<Garage />);