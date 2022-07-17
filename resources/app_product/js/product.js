import React, {Fragment} from 'react';
import ReactDom from 'react-dom';
import AppContainer from "./components/App/AppContainer";
import {Provider} from "react-redux";
import configureStore from './store/configureStore.js'

let initialState = {
    reducer1:'Defined name of App',
    products: {
        list: [{
            id:0,
            name:'Product #1',
            price:'123.44',
        }],
        cfg:{}
    },
};
let store = configureStore(initialState);


ReactDom.render(<Provider store={store}>
        <AppContainer />
    </Provider>,
    document.getElementById('root')
)
