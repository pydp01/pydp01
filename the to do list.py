from tkinter import *

def submit():
    task = entry.get()
    if task != "":
        lb.insert(END, task)
        entry.delete(0, "end")
def delete():
    lb.delete(ANCHOR)
    
root=Tk()
root.geometry("500x450")
root.title('TO-DO-LIST')
root.config(bg='SKYBLUE')
root.resizable(width=False, height=False)

frame = Frame(root)
frame.pack(pady=10,side=BOTTOM)

lb = Listbox(
    frame,
    width=25,
    height=8,
    font=('Times', 18),
    fg='#464646'
)
lb.pack(side=LEFT, fill=BOTH)

task_list = [
    ]
for item in task_list:
    lb.insert(END, item)

lable=Label(root,text="The To-Do-List",font="sanserif 40 bold",bg="PINK",fg="WHITE")
lable.pack(fill=X,padx=5,pady=5)

entry=Entry(root,font="sanserif 15 bold",bg="pink",fg="BLACK")
entry.pack(ipadx=30,padx=50,pady=5,side=LEFT)
bframe = Frame(root)
bframe.pack(side=LEFT,pady=20)
button=Button(bframe,text="Submit",command=submit,bg="PINK",fg="PURPLE")
button.pack(fill=BOTH, expand=True, side=LEFT)

btn=Button(bframe,text="Delete",command=delete,bg="PINK",fg="PURPLE")
btn.pack(fill=BOTH, expand=True, side=LEFT)

root.mainloop()
