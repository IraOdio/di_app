import {makeAutoObservable, observable, action} from 'mobx';

class RootStore{
    anyValue = "someValue"

    constructor() {
        makeAutoObservable(this,{
            anyValue: observable,
        })
    }
}
