const { it } = require("mocha");

describe("Blink" , ()=>{
    it("Shopping and add to cart with sign in",()=>{
        cy.visit("blink.byethost12.com/");
    cy.get('[href=user/signIn.html]').click();
    cy.get('[type=email').type("diab.sadi98@gmail.com");
    cy.get('[type=password').type("diab123");
    cy.get('[type=submit]').click();
    cy.get('.b8').click();
    cy.get('.item:nth(1)').click();
    cy.get('[href=cart.php]').clikc();
    cy,get('#btntotal').click();
    
    })
    it("Log out" , ()=>{
        cy.visit("blink.byethost12.com/user/index.php");
        cy.get(['herf=logout.php']).click() 
       })
    
    it("Admin Log in test" , ()=>{
        cy.visit("blink.byethost12.com/admin/signIn.php");
        cy.get('[type=email').type("diab.sadi98@gmail.com");
        cy.get('[type=password').type("diab123");
        cy.get('[type=submit]').click();
    })
    it("Admin View Data",()=>{
        cy.get("[href=pages/tables/data.png").click();
        cy.get("tabindex[0]").invoke('text').then((text)=>{
            expect(text).should.not.equal(null);
        })
    })
})