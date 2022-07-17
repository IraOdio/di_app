import { createStore, applyMiddleware } from 'redux'
import reducer from "./reducer";

const configureStore = (preloadedState) => {
    return createStore( reducer, preloadedState);
}
// TODO: Переделать createStore на configureStore из пакета @reduxjs/toolkit, т.к. первый объявлен депрекатом и узнать изменения)
export default configureStore;
