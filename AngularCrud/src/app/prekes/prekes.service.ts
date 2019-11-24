import { Injectable } from '@angular/core';

let prekes = [
  { id: 0, name: "Bulvės", amount: 200, price: 1.50, pasirinkta: false }, // 
  { id: 1, name: "Ryžiai", amount: 999, price: 1, pasirinkta: false },    // 
  { id: 2, name: "Morkos", amount: 150, price: 0.75, pasirinkta: false }, // hardcodintas prekiu listas
  { id: 3, name: "Svogūnai", amount: 350, price: 2, pasirinkta: false },  //
  { id: 4, name: "Miltai", amount: 155, price: 1.25, pasirinkta: false }  //
];

@Injectable({
  providedIn: 'root'
})

export class PrekesService {

  constructor() { }


  // get

  get(query = '') {
    return new Promise(resolve => {
      let data;
  
      if (query === 'completed' || query === 'active'){
        const isCompleted = query === 'completed';
        data = prekes.filter(preke => preke.pasirinkta === isCompleted);
      } else {
        data = prekes;
      }
  
      resolve(data);
    });
  }


  // pridet

  add(data) {
    return new Promise(resolve => {
      prekes.push(data);
      resolve(data);
    });
  }


  // pakeist
  
  putI(changed) {
    return new Promise(resolve => {
      let index = prekes.findIndex(preke => preke === changed);
      prekes[index].id = changed.id;
      resolve(changed);
    });
  }

  putN(changed) {
    return new Promise(resolve => {
      let index = prekes.findIndex(preke => preke === changed);
      prekes[index].name = changed.name;
      resolve(changed);
    });
  }

  putA(changed) {
    return new Promise(resolve => {
      let index = prekes.findIndex(preke => preke === changed);
      prekes[index].amount = changed.amount;
      resolve(changed);
    });
  }

  putP(changed) {
    return new Promise(resolve => {
      let index = prekes.findIndex(preke => preke === changed);
      prekes[index].price = changed.price;
      resolve(changed);
    });
  }


  // istrint

  delete(selected) {
    return new Promise(resolve => {
      const index = prekes.findIndex(todo => todo === selected);
      prekes.splice(index, 1);
      resolve(true);
    });
  }

  deleteMark() {
    return new Promise(resolve => {
      prekes = prekes.filter(preke => !preke.pasirinkta);
      resolve(prekes);
    });
  }


  //toggle

  toggle(selected) {
    selected.pasirinkta = !selected.pasirinkta;
    return Promise.resolve();
  }
  
}