import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';//reik irasyt

import { PrekesService } from './prekes.service'; //pats isiraso


@Component({
  selector: 'app-prekes',
  templateUrl: './prekes.component.html',
  styleUrls: ['./prekes.component.css'],
  providers: [PrekesService] //reik paciam irasyt
})
export class PrekesComponent implements OnInit {

  constructor(private prekesService: PrekesService, private route: ActivatedRoute) { } //kodel private?

  ngOnInit() {
    this.route.params.subscribe(params => { //
      this.path = params['status'];         //Route tarp all/active/completed
      this.getPrekes(this.path);            //
    });
  }


  // kintamieji 

  public prekes;
  public activeTasks;
  public newPreke = { name: "", amount: null, price: null };
  public path;


  // get 

  getPrekes(query = ''){
    return this.prekesService.get(query).then(prekes => {
      this.prekes = prekes;
      this.activeTasks = this.prekes.filter(preke => !preke.pasirinkta).length;
    });
  }


  //pridet

  addPreke(){
    this.prekesService.add({ id: this.prekes.length + 1, name: this.newPreke.name, amount: this.newPreke.amount, price: this.newPreke.price }).then(() => {
      return this.getPrekes();
    }).then(() => {
      this.newPreke = { name: "", amount: null, price: null }; // clear input form value
    });
  }


  // pakeist

  updateId(preke, newValue) {
    preke.id = newValue;
    return this.prekesService.putI(preke).then(() => {
      preke.editing = false;
      return this.getPrekes();
    });
  }

  updateName(preke, newValue) {
    preke.name = newValue;
    return this.prekesService.putN(preke).then(() => {
      preke.editing = false;
      return this.getPrekes();
    });
  }

  updateAmount(preke, newValue) {
    preke.amount = newValue;
    return this.prekesService.putA(preke).then(() => {
      preke.editing = false;
      return this.getPrekes();
    });
  }

  updatePrice(preke, newValue) {
    preke.price = newValue;
    return this.prekesService.putP(preke).then(() => {
      preke.editing = false;
      return this.getPrekes();
    });
  }


  // istrint

  delPreke(preke) {
    this.prekesService.delete(preke).then(() => {
      return this.getPrekes();
    });
  }
  
  deleteMarked() {
    this.prekesService.deleteMark().then(() => {
      return this.getPrekes();
    });
  }

  // toggle
  togglePreke(preke) {
    this.prekesService.toggle(preke).then(() => {
      return this.getPrekes();
    });
  }

}