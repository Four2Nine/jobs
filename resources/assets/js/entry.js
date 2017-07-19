import React from 'react';
import ReactDOM from 'react-dom';
import { MuiThemeProvider } from 'material-ui/styles';
import BottomNavigation from './BottomNavigation';
// import Root from './Root';
// import Button from './Button'

function App() {
    return (
        <MuiThemeProvider>
            <BottomNavigation />
        </MuiThemeProvider>
    );
}

ReactDOM.render(<App />, document.querySelector('#app'));
